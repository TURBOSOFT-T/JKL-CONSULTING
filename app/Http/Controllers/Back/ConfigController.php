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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConfigRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storef(StoreConfigRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show(Config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConfigRequest  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateConfigRequest $request, Config $config)
    {
      //  $user = Auth::user();


        $input = $request->all();
        $config = config::first();
        dd($config);

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/Image/logos/', $filename);
            $input['image'] = $filename;
        }

        
        if ($request->hasFile('logo')) {

            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/Image/logos/', $filename);
            $input['logo'] = $filename;
        }
        if ($request->hasFile('icon')) {

            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/Image/logos/', $filename);
            $input['icon'] = $filename;
        }

                 $config->update($input);
      //  $user->products()->create($input);

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
