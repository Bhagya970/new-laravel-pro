<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact us') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container">
    <!-- <div class="row" style="margin-top: 120px;"> -->
        <div class="col-md-offset-3 col-md-6">
        <!-- @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif -->

            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4 style="margin-bottom: 0;"><i class="icon fa fa-ban"></i> {{Session('success')}}</h4>
                </div>
            @endif

            <form action="{{ url('sms/send') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email"><strong>Mobile number</strong></label>
                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile number">
                </div>
                <div class="form-group">
                    <label for="message"><strong>Message</strong></label>
                    <textarea type="text" name="message" class="form-control" id="message" placeholder="Message here..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send SMS</button>
            </form>
        </div>
    <!-- </div> -->
</div>

            
           </div>
        </div>
    </div>
</x-app-layout>
