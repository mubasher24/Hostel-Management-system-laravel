<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Room;

class RoomController extends Controller
{
    public function createRoom(Request $request)
    {
        if ($request->isMethod('post')) {
            $roomno = $request->input('rmno');

            if (Room::where('room_no', $roomno)->exists()) {
                return redirect()->back()->with('msg', 'Room already exists.');
            }

            $rooms = new Room;
            $rooms->seater = $request->input('seater');
            $rooms->room_no = $roomno;
            $rooms->fees = $request->input('fee');
            $rooms->save();

            return redirect()->back()->with('msg', 'Room has been added successfully.');
        }

        return view('admin.add-room');
    }


    public function manageRooms()
    {
        $rooms = Room::all();
        return view('admin.manage-rooms', compact('rooms'));
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.edit-room', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $room->room_no = $request->input('room_no');
        $room->seater = $request->input('seater');
        $room->fees = $request->input('fees');
        $room->save();

        return redirect()->route('admin.manage-rooms')->with('success', 'Room Details updated successfully.');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('admin.manage-rooms')->with('success', 'Room Deleted successfully.');
    }

    public function getSeater(Request $request)
{
    $roomid = $request->input('roomid');
    $room = Room::where('room_no', $roomid)->first();

    return $room ? $room->seater : '';
}

public function getFees(Request $request)
{
    $rid = $request->input('rid');
    $room = Room::where('room_no', $rid)->first();

    return $room ? $room->fees : '';
}

}

