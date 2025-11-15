<?php

namespace App\Http\Controllers;

use App\Models\{UserActions, User, Actions};
use Illuminate\Http\Request;

class UserActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userActions = UserActions::with(['user', 'action.categories'])->get();
        // dd($userActions[0]->user->name);
        return view('userAction/userActionIndex', compact('userActions')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=User::all();
        $actions=Actions::all();
        return view('userAction/userActionCreate', compact('user', 'actions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'user'=>'required',
            'actions'=>'required',
            'quantity'=>'required|integer|min:1',
            'date'=> 'date'
        ]);
        
        UserActions::create([
            'user_id'=>$request->user,
            'action_id'=>$request->actions,
            'quantity'=>$request->quantity,
            'date'=>$request->date
        ]);
        return redirect()->route('useraction.index')->with('success', 'Ação do usuario registrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserActions $id)
    {
        
        $userActions = UserActions::findOrFail($id);
        //dd($category);
        return view('userAction/userActionShow', compact('useraction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $useractions = UserActions::findOrFail($id);
        // dd($useractions);
        $user = User::findOrFail($useractions->user_id);
        $users = User::all();
        $action = Actions::findOrFail($useractions->action_id);
        $actions = Actions::all();
        //dd($category);
        return view('userAction/userActionEdit', compact('useractions', 'user', 'users', 'action', 'actions') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'action_id'=> 'required',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|date'
        ]);
        $useractions = UserActions::findOrFail($id);
        // dd($request);
        $useractions->update($request->except(['_token', '_method']));
        return redirect()->route('useraction.index');


     

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserActions $userActions)
    {
        //
    }
}
