  @include('templates.header')

    <x-navbar />

    <h2> All Products </h2>
    <x-products :products="$products"/>
    <h2> All Users </h2>
    <x-users :users="$users"/>

    @include('templates.footer')