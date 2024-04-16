<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $users = Users::all(); // Supposons que vous avez un modèle User
        $outgoing_id = auth()->id(); // L'ID de l'utilisateur connecté, ajustez selon votre logique d'authentification
        $output = '';

        foreach ($users as $user) {
            $messages = Message::where(function ($query) use ($user, $outgoing_id) {
                $query->where('incoming_msg_id', $user->unique_id)
                      ->orWhere('outgoing_msg_id', $user->unique_id)
                      ->where(function ($q) use ($outgoing_id) {
                          $q->where('outgoing_msg_id', $outgoing_id)
                            ->orWhere('incoming_msg_id', $outgoing_id);
                      });
            })
            ->orderBy('msg_id', 'desc')
            ->limit(1)
            ->get();

            if ($messages->count() > 0) {
                $result = $messages[0]->msg;
            } else {
                $result = "No message available";
            }

            $msg = (strlen($result) > 28) ? substr($result, 0, 28) . '...' : $result;
            $you = ($messages->count() > 0 && $messages[0]->outgoing_msg_id == $outgoing_id) ? "You: " : "";
            $offline = ($user->status == "Offline now") ? "offline" : "";
            $hid_me = ($outgoing_id == $user->unique_id) ? "hide" : "";

            $output .= '<a href="' . route('chat', ['user_id' => $user->unique_id]) . '">
                            <div class="content">
                                <img src="/img/uploads/'. $user->img .'" alt="">
                                <div class="details">
                                    <span>'. $user->firstname . " " . $user->lastname .'</span>
                                    <p>'. $you . $msg .'</p>
                                </div>
                            </div>
                            <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                        </a>';
        }

        return view('messages', compact('output'));
    }
}
