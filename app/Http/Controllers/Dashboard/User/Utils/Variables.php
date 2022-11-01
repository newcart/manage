<?php

namespace App\Http\Controllers\Dashboard\User\Utils;

class Variables {
    public static function UserColumns() {
        return [
            'user_id' => 'ID',
            'name' => 'Kullanıcı Adı',
            'firstname' => 'Ad',
            'lastname' => 'Soyad',
            'email' => 'E-Posta',
            'gsm' => 'Telefon Numarası',
            'status' => 'Durum',
            'created_at' => 'Oluşturma Tarihi',
            'updated_at' => 'Güncelleme Tarihi',
        ];
    }

    public static function ServiceColumns() {
        // TODO: Add service datatable columns
    }

    public static function TypeColumns() {
        // TODO: Add type datatable columns
    }
}
