<!--+++++++++++++++++++++++++++++++++++++++++++++
            GUEST MY ACCOUNT PAGE
+++++++++++++++++++++++++++++++++++++++++++++++-->    


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{ Auth::user()->name }}!
                    
                </div>

                <div class="card-body">
 

                    <div>
                        <a href="">Create Ticket</a>
                    </div>



                 
                </div>
                
            </div>
        </div>
        




        <div class="col-md-9">
            <div class="card">
               
                <div class="card-header"><h3>Create Ticket</h3> </div>

                <div class="card-body">
                    body belongs here
                </div>


            </div>
        </div>
    </div>
</div>

@endsection
