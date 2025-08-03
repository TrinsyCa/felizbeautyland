<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function processReservation(Request $request)
    {
        $reservationUrl = $request->input('reservation_url');

        if (!$reservationUrl || !filter_var($reservationUrl, FILTER_VALIDATE_URL)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid reservation URL'
            ], 400);
        }

        if (!str_starts_with($reservationUrl, 'https://kolayrandevu.com')) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid domain'
            ], 400);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Redirecting to reservation page',
            'redirect_url' => route('reservation', ['reservation_url' => $reservationUrl])
        ]);
    }

    public function showReservation(Request $request)
    {
        $reservationUrl = $request->query('reservation_url');
        return view('pages.reservation', compact('reservationUrl'));
    }
}
