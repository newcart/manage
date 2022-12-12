<?php

namespace App\Helpers\Components;

class DatatableComponent
{
    public static function createDatatableJs(string $service, array $cols): string
    {
        $host = request()->getSchemeAndHttpHost();
        $columns = '';
        foreach ($cols as $key => $value) {
            $columns .= "{
                data: '". $key ."',
                name: '". $key ."',
            },
            ";
        }

        $html = "
        <script type='text/javascript'>
         $(function () {
            const table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '". "$host/dashboard/$service/table" ."',
                columns: [
                    " . $columns . "
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
        </script>
        ";

        return $html;
    }

    public static function createDatatableHTML(array $cols): string
    {
        $html = "
        <table class='table table-bordered table-striped data-table'>
            <thead>
                <tr>
                    ";
        foreach ($cols as $key => $value) {
            $html .= "<th>". $value ."</th>";
        }
        $html .= "
                    <th>Eylemler</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        ";
        return $html;
    }

    public static function createDatatable(string $service, array $cols): array
    {
        $html = self::createDatatableHTML($cols);
        $js = self::createDatatableJs($service, $cols);
        return [
            'html' => $html,
            'js' => $js
        ];
    }
}
