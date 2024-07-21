<?php




namespace App\Http\Controllers\Back;

use App\Http\{
    Controllers\Controller,

};
use App\Models\Config;
use App\Http\Requests\StoreConfigRequest;
use App\Http\Requests\UpdateConfigRequest;

class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $configs = config::first();
      //  dd($configs);
        return view('back.parametres.contact' , compact('configs'));
    }
    

    
    public function contact_admin()
    {
        $configs = config::first();
        dd($configs);
        return view('back.parametres.contact' , compact('configs'));
    }

    


    public function edit(Config $config)
    {
        $config= config::first();
       // dd($config);
       //dd($config->description);
        return view('back.config.edit' , compact('config'));
    }

    public function update(UpdateConfigRequest $request, Config $config)
    {
      //  $user = Auth::user();


        $input = $request->all();
        $config = config::first();
       // dd($config->description);

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/Image/Parametres/', $filename);
            $input['image'] = $filename;
        }

        
        if ($request->hasFile('logo')) {

            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/Image/Parametres/', $filename);
            $input['logo'] = $filename;
        }
        if ($request->hasFile('icon')) {

            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/Image/Parametres/', $filename);
            $input['icon'] = $filename;
        }

                 $config->update($input);
      

        return redirect()->back()->with('success', 'Updated successfully!');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $config)
    {
        //
    }
}
