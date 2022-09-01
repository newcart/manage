<?php

namespace App\Helpers;

class Components
{
    public static function SideBar(string $url, string $user_type)
    {
        $items = config('sidebar.items');

        $data['items'] = [];
        foreach ($items as $item) {
            $item['active'] = false;
            if (in_array($user_type, $item['user_types']) || in_array('*', $item['user_types'])) {
                if($item['url'] == '/' . $url) {
                    $item['active'] = true;
                }
                $data['items'][] = $item;
            }
        }

        return view('sections.Sidebar', $data)->render();
    }

    public static function Navbar()
    {
        $user = auth()->user();
        $data['username'] = $user->firstname . ' ' . $user->lastname;
        $data['userAbb'] = $user->firstname[0] . $user->lastname[0];
        return view('sections.Navbar', $data)->render();
    }

    public static function createDatatableJs(string $ajaxURL, array $cols)
    {
        $columns = '';
        foreach ($cols as $key => $value) {
            $columns .= "{
                data: '". $key ."',
                name: '". $key ."'
            },
            ";
        }

        $html = "
        <script type='text/javascript'>
         $(function () {
            const table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '". $ajaxURL ."',
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

    public static function createDatatableHTML(array $cols)
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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        ";
        return $html;
    }

    public static function createDatatable(string $ajaxURL, array $cols)
    {
        $html = self::createDatatableHTML($cols);
        $js = self::createDatatableJs($ajaxURL, $cols);
        return [
            'html' => $html,
            'js' => $js
        ];
    }
}
