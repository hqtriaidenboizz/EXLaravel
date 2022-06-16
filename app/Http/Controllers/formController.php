<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HotelRequest;

class AdminController extends Controller
{
    public function index() {return view('form');}

    public function addRoom(HotelRequest $Request)
    {
        $image = $Request->file('roomImage');
        $path = $image->move('images', $image->getClientOriginalName());

        $newRoom = [
            'name' => $Request->roomName,
            'description' => $Request->roomDescription,
            'price' => $Request->roomPrice,
            'image' => $image->getClientOriginalName(),
        ];

        if (isset($_SESSION['rooms'])) {
            $_SESSION['rooms'][] = $newRoom;
        } else {
            if (session_id() === '')
                session_start();
            $_SESSION['rooms'][] = $newRoom;
        }
        echo '<script>alert(" thành công")</script>';
        return view('form');
    }
}
