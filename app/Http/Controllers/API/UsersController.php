<?php

namespace App\Http\Controllers\API;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::orderby('id', 'DESC')->paginate(2);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'required|max:191|unique:users',
            'password' => 'required|min:6'
        ]);
        
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'type' => $request['type'],
            'bio' => $request['bio'],
            'notes' => $request['notes'],
            'education' => $request['education'],
            'location' => $request['location'],
            'skills' => $request['skills'],
            'photo' => $request['photo'],
            'job' => $request['job'],
            'password' => Hash::make($request['password'])
        ]);
    }

    public function show($id)
    {
        //
    }

    public function profile() {
        return auth('api')->user();
    }

    public function updateProfile(Request $request){
        $user = auth('api')->user();
        if ($request->photo) {
            $photo_name = time().'.'. explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
	        \Image::make($request->photo)->save(public_path('/img/users/').$photo_name);
        }
        return ['message' => 'updating profile...'];
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'required|max:191|unique:users,email,'.$id,
            'password' => 'sometimes|min:6'
        ]);
        User::findOrFail($id)->update($request->all());
    }

    public function destroy($id)
    {
        return User::destroy($id);
    }
}
