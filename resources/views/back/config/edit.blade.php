@extends('back.layout')
@section('main')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer Paramètres</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contactadmins.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <br><br><br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('contactadmins.update', $config->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>E-mail:</strong>
                    <input type="text" name="email" value="{{ $config->email }}" class="form-control"
                        placeholder="Email" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Téléphone:</strong>
                    <input type="text" name="telephone" value="{{ $config->telephone }}" class="form-control"
                        placeholder="Téléphone" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Addresse:</strong>
                    <input type="text" name="addresse" value="{{ $config->addresse }}" class="form-control"
                        placeholder="Addresse" >
                </div>
            </div>

         {{--    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Frais de transport:</strong>
                    <input type="text" name="frais" value="{{ $config->frais }}" class="form-control"
                        placeholder="Frais de transport" >
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                @if (isset($config) && !$errors->has('icon'))
                    <div>
                        <strong>Icon:</strong>
                        <p>{{-- <img class="w-50" src="{{ url('public/image/Products/' . $produit->image) }}"> --}}
                        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" />
                            <img class="card-img-top product-image"
                         style="height: 5; with:5"       src="{{ url('public/Image/Parametres/' . $config->icon) }}">

                        </div>
                        </p>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="icon">Icon:</label>
                            <input type="file" class="form-control-file" id="icon" name="icon">
                        </div>
                    </div>
                @endif
            </div>

            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Original Price:</strong>
                    <input type="text" name="originalPrice" value="{{ $produit->originalPrice }}" class="form-control"
                        placeholder="Original Price" required>
                </div>
            </div> --}}

            {{--     <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Discount Price:</strong>
                    <input type="text" name="discountPrice" value="{{ $produit->discountPrice }}" class="form-control"
                        placeholder="Discount Price" required>
                </div>
            </div> --}}
            {{--    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Slug:</strong>
                    <input type="text" name="slug" value="{{ $produit->slug }}" class="form-control"
                        placeholder="Title" required>
                </div>
            </div> --}}

            @if (isset($config) && !$errors->has('logo'))
                <div>
                    <p>{{-- <img class="w-50" src="{{ url('public/image/Products/' . $produit->image) }}"> --}}
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" />
                        <img class="card-img-top product-image" src="{{ url('public/Image/Parametres/' . $config->logo) }}">

                    </div>
                    </p>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label for="logo">Logo:</label>
                        <input type="file" class="form-control-file" id="logo" name="logo">
                    </div>
                </div>
            @endif
            <br><br>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" rows="4" cols="50" name="description" class="form-control" placeholder="Ajouter le description" required>{{ old('description', $config->description) }}</textarea>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enregistrer </button>
            </div>
        </div>


    </form>
@endsection

{{-- 
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
 --}}