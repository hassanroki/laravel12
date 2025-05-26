<div>
    <h2>Contact Us</h2>
    <h2>Name: {{ request()->name }} </h2>
    <h2>ID: {{ request()->id }}</h2>
    @include('subview.input', [
    'myName' => request()->name
   ])
</div>
