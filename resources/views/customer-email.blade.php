<div class="pull-right">
<a class="btn btn-primary" href="{{ route('request-customer-email') }}"> Back</a>
</div>
@if (isset($error))
<div class="alert alert-danger">
       {{ $error }}
</div>
@endif

@if (isset($customers))
<h2>Customers Found</h2>
<ul>
  @foreach ($customers as $customer)
     <li>
            Name: {{ $customer->name }}
              <br>
            Email: {{ $customer->email }}
               <br>
               </li>
      @endforeach
</ul>
@endif