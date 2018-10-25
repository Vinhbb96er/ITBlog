@extends('layouts.master')

@section('content')
<div class="header-bottom">
    <div class="container">
        <div class="logo">
            <h1><a href="index.html">IT BLOG</a></h1>
            <p><label class="of"></label>LET'S MAKE A PERFECT BLOG<label class="on"></label></p>
        </div>
    </div>
</div>
<div class="banner-1">

</div>
<div class="technology">
    <div class="container">
        <div class="col-md-16">
            <div class="contact-section">
                <h2 class="w3">CREATE POST</h2>             
                    <div class="contact-grids">
                        <div class="contact-grid">
                            {{ Form::open(['route' => 'post.store', 'method' => 'POST']) }}
                                <div class="form-group col-md-6">
                                    {{ Form::select('category_id', $categories, 1, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="title" value="" placeholder="Title" required="">
                                </div>

                                <div class="form-group col-md-12">
                                        <input type="text" name="preview" value="" placeholder="Preview"required="">
                                    </div>
                                <div class="form-group col-md-12">
                                        <textarea type="text" name="content" placeholder="Content" required=""></textarea> 
                                </div>
                                <div class="clearfix"></div>
                                <input type="submit" value="Create">
                                    
                            {{ Form::close() }}
                        </div>
                        <div class="clearfix"></div>
                    </div>
            </div>
        </div>
        
        <div class="clearfix"></div>
        <!-- technology-right -->
    </div>
</div>
@endsection
