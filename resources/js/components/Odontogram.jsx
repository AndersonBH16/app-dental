import React from "react";
import Tooth from "./Tooth";
import * as CONSTANTS from "../config/constants";
import * as DEFAULTS from "../config/defaults";
import * as PATHS from "../config/paths";
import {Box, Button, Dialog, DialogActions, DialogTitle, Stack, TextField} from "@mui/material";
import {post, put} from "../services/api";
import {DatePicker} from "@mui/x-date-pickers";
import DialogFindings from "./DialogFindings";

const SuccessAlert = ({open, onClose, message}) => {
    return (
        <Dialog
            open={open}
            onClose={onClose}
            aria-labelledby="alert-dialog-title"
            aria-describedby="alert-dialog-description"
        >
            <DialogTitle>{message}</DialogTitle>
            <DialogActions>
                <Button onClick={onClose} autoFocus>Aceptar</Button>
            </DialogActions>
        </Dialog>
    )
}

export function Odontogram() {
    const [data, setData] = React.useState(DEFAULTS.ODONTOGRAM);
    const [selTooth, setSelTooth] = React.useState(null);
    const [open, setOpen] = React.useState(false);
    const findings = React.useRef({});
    const modifying = React.useRef({});
    const url = new URL(location.href);
    const dni = url.searchParams.get('dni');

    React.useEffect(() => {
        post(PATHS.ODONTOGRAM, {dni: dni, type: url.searchParams.get('type')}).then(data => {
            setFindings(data);
            setData(data);
        })
    }, []);

    const adultModel = () => data.payload.filter(item => item.age === CONSTANTS.AGE.ADULT);
    const childModel = () => data.payload.filter(item => item.age === CONSTANTS.AGE.CHILD);

    const setTooth = (tooth) => {
        setData({
            ...data,
            payload: data.payload.map((item) => {
                if (item.number === tooth.number) {
                    handleFindings(item.number, tooth.findingText);
                    return tooth;
                }
                return item;
            }),
        });
    }

    const setFindings = (data) => {
        data.payload.forEach((item) => {
            handleFindings(item.number, item.findingText);
        });
    }

    const handleFindings = (id, finding) => {
        findings.current[id] = finding;
    }

    const handleSubmit = (e) => {
        e.preventDefault();
        const formData = new FormData(e.currentTarget);
        data.payload.forEach((tooth) => {
            if (tooth.blob !== undefined) {
                formData.append(`paths[${tooth.number}]`, JSON.stringify(tooth.canvasPaths));
                if (tooth.blob) formData.append(`images[${tooth.number}]`, tooth.blob);
                formData.append(`types[${tooth.number}]`, JSON.stringify(tooth.findingTypes));
            }
            if (findings.current[tooth.number] !== undefined && findings.current[tooth.number]) {
                formData.append(`findings[${tooth.number}]`, findings.current[tooth.number]);
            }
        });
        put(PATHS.ODONTOGRAM, formData).then(data => {
            setOpen(true);
            setFindings(data);
            setData(data);
            if (window.parent.closeOdontogramModal !== undefined) window.parent.closeOdontogramModal();
        });
    }

    return (
        <Box component={"form"} onSubmit={handleSubmit} style={{width: '100%'}}>
            <input type="hidden" name={"id"} defaultValue={data.id}/>
            <input type="hidden" name={"dni"} defaultValue={dni}/>
            <SuccessAlert
                open={open}
                onClose={() => {setOpen(false)}}
                message="Cambios Guardados!"
            />
            <DialogFindings tooth={selTooth} setTooth={setTooth} findings={findings} modifying={modifying} onClose={() => {setSelTooth(null)}}/>
            <div style={{display: "flex", justifyContent: 'center'}}>
                {adultModel().filter(tooth => tooth.position === CONSTANTS.POSITION.UP).map((tooth, index) => (
                    <Tooth key={index} item={tooth} handleFindings={handleFindings} findings={findings} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <div style={{display: "flex", justifyContent: 'center', width: '60%', margin: 'auto'}}>
                {childModel().filter(tooth => tooth.position === CONSTANTS.POSITION.UP).map((tooth, index) => (
                    <Tooth key={index} item={tooth} handleFindings={handleFindings} findings={findings} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <div style={{display: "flex", justifyContent: 'center', width: '20%', margin: 'auto'}}>
                {childModel().filter(tooth => tooth.position === CONSTANTS.POSITION.DOWN).map((tooth, index) => (
                    <Tooth key={index} item={tooth} handleFindings={handleFindings} findings={findings} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <div style={{display: "flex", justifyContent: 'center'}}>
                {adultModel().filter(tooth => tooth.position === CONSTANTS.POSITION.DOWN).map((tooth, index) => (
                    <Tooth key={index} item={tooth} handleFindings={handleFindings} findings={findings} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <Stack padding={2} spacing={1}>
                <TextField
                    multiline
                    fullWidth
                    variant="outlined"
                    value={data.specifications}
                    name={"specifications"}
                    label={"Especificaciones"}
                    rows={3}
                    onChange={(e) => {
                        setData({
                            ...data,
                            specifications: e.currentTarget.value,
                        })
                    }}
                />
                <TextField
                    multiline
                    fullWidth
                    variant="outlined"
                    value={data.observations}
                    name={"observations"}
                    label={"Observaciones"}
                    rows={3}
                    onChange={(e) => {
                        setData({
                            ...data,
                            observations: e.currentTarget.value,
                        })
                    }}
                />
            </Stack>
            <Box paddingX={2}>
                <DatePicker
                    label="Fecha"
                    value={data.date}
                    onChange={(value) => {
                        setData({
                            ...data,
                            date: value,
                        });
                    }}
                    renderInput={(params) => (
                        <TextField
                            {...params}
                            name="date"
                            fullWidth
                            variant="outlined"
                        />
                    )}
                />
            </Box>
            <Button type={"submit"}>
                Guardar
            </Button>
        </Box>
    );
}
