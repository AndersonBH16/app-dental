import React from 'react';
import ReactDOM from 'react-dom/client';
import {Odontogram} from "./components/Odontogram";
import {LocalizationProvider} from "@mui/x-date-pickers";
import { AdapterDateFns } from '@mui/x-date-pickers/AdapterDateFns';

try {
    console.log('MUELITAS');
    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(
        <React.StrictMode>
            <h1>Muelitas</h1>
            <LocalizationProvider dateAdapter={AdapterDateFns}>
                <Odontogram />
            </LocalizationProvider>
        </React.StrictMode>
    );
} catch (error) {
    console.error('Error rendering React:', error);
}
