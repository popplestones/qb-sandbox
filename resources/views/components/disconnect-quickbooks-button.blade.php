@props(['action'])
<form action="{!! $action !!}" method="POST">
    @csrf
    @method("DELETE")

    <x-button>Disconnect from Quickbooks</x-button>
</form>