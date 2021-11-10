<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Flash;
use Response;

class EnrollmentController extends Controller {

    public $successStatus = 200;

    public function enrollmentApi() {
        $enrollment = Enrollment::all();

        if (count($enrollment) > 0) {
            return response()->json($enrollment, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no data saved in the database'], 404);
        }        
    }
}

?>