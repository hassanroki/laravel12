<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    // Add Data
    public function add()
    {
        DB::table('teachers')->insert([
            [
                'name'    => 'Runad',
                'address' => 'Shippur',
            ],
            [
                'name'    => 'Rana',
                'address' => 'Rasulpur',
            ],
            [
                'name'    => 'Murad',
                'address' => 'Kumedpur',

            ],
        ]);
        return "Data Added Successfully!";
    }

    // Get Data
    public function getData()
    {
        // // All Data
        // $item = DB::table('teachers')
        //     ->get();

        // // Two Data
        // $item = DB::table('teachers')
        //     ->limit(2)
        //     ->get();

        // // First Single Data
        // $item = DB::table('teachers')
        //     ->first();

        // // Where id = 101
        // $item = DB::table('teachers')
        //     ->where('id', 101)
        //     ->first();

        // Where id = 101, Only Name
        $item = DB::table('teachers')
            ->select('name')
            ->where('id', 101)
            ->get();
        return $item;
    }

    // Update
    public function update()
    {
        DB::table('teachers')
            ->where('id', 110)->update([
            'name'    => "Murad Khan",
            'address' => "Kumedpur Union",
        ]);
        return "Updated Successfully!";
    }

    // Delete
    public function destroy()
    {
        DB::table('teachers')
            ->where('id', 110)
            ->delete();
        return "Deleted Successfully!";
    }
}
