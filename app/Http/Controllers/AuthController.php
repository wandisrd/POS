<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Register new employee.
     */
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'em_first_name' => 'required|max:250',
            'em_last_name' => 'required|max:250',
            'em_email_1' => 'required|email|unique:employees,em_email_1',
            'em_password' => 'required|min:6',
            'em_phone_1' => 'nullable|max:250',
            // Validasi kolom lainnya sesuai kebutuhan
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Buat employee baru
        $employee = Employee::create([
            'em_st_sysid' => 1,
            'em_dc_sysid' => 1,
            'em_id' => 1,
            'em_type' => 1,
            'em_username' => 1,
            'em_first_name' => $request->em_first_name,
            'em_middle_name' => 1,
            'em_last_name' => $request->em_last_name,
            'em_password' => bcrypt($request->em_password), // Menggunakan bcrypt untuk password hashing
            'em_nin' => 1,
            'em_country_id' => 1,
            'em_province' => 1,
            'em_city' => 1,
            'em_district' => 1,
            'em_urban_district' => 1,
            'em_street' => 1,
            'em_zip_code' => 1,
            'em_bank_id' => 1,
            'em_account_number' => 1,
            'em_tax_number' => 1,
            'em_phone_1' => $request->em_phone_1,
            'em_phone_2' => 1,
            'em_email_1' => $request->em_email_1,
            'em_email_2' => 1,
            'em_social_media_1' => 1,
            'em_social_media_2' => 1,
            'em_social_media_3' => 1,
            'em_social_media_4' => 1,
            'em_start_date' => '2024-01-01',
            'em_end_date' => '2024-01-01',
            'em_status' => 1,
            'em_creater' => 1,
            'em_lastmomodifier' => 1
        ]);

        // Generate token untuk login setelah register
        $token = $employee->createToken('auth_token')->plainTextToken;

        // Response sukses dengan data user dan token
        return response()->json([
            'message' => 'Registration successful',
            'employee' => $employee,
            'token' => $token,
        ], 201);
    }
}
