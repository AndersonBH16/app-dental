<?php

namespace App\DataTables;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PacientesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($row) {
                return '
                    <div class="btn-group me-1 mt-2">
                        <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Acciones <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu" style="">
                            <a class="dropdown-item" href="/pacientes/'. $row["dni"] .'/odontograma?type=10">
                                <i class="fa fa-h-square mr-2" style="color: darkcyan"></i>
                                Odontograma Inicial
                            </a>
                            <a class="dropdown-item" href="/pacientes/'. $row["dni"] .'/odontograma?type=20">
                                <i class="fa fa-h-square mr-2" style="color: darkcyan"></i>
                                Odontograma Final
                            </a>
                            <a class="dropdown-item" href="/historia-clinica/'. $row["dni"] .'/ver-historial-clinico">
                                <i class="fa fa-eye mr-2" style="color: darkcyan"></i>
                                Historial Médico
                            </a>
                        </div>
                    </div>
                ';
            })
            ->editColumn('created_at', function ($row) {
                return $row->created_at->format('d/m/Y');
            })
            ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Paciente $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('pacientes-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ])
                    ->parameters([
                        'responsive' => true,
                        'autoWidth' => false,
                        'hover' => true,
                        'language' => [
                            'url' => '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json',
                        ],
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('dni'),
            Column::make('nombres'),
            Column::make('apellido_paterno'),
            Column::make('apellido_materno'),
            Column::make('genero'),
            Column::make('telefono'),
            Column::make('email'),
            Column::make('fecha_nacimiento'),
            Column::make('direccion'),
            Column::make('estado'),
            'created_at' => ['title' => 'Fecha de Creación'],
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Pacientes_' . date('YmdHis');
    }
}
