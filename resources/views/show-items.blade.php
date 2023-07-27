<div class="flex">
    <nav class="w-1/12 text-black">
        <span> Icon 1</span>
        <span> Icon 2</span>
        <span> Icon 3</span>
    </nav>
<div class="bg-gray-300 runded-md w-2/3 flex flex-col gap-1 p-6">
    <h1 class="text-4xl"> Listas: </h1>
    @foreach ($listnames as $listname)
        <h2 class="text-2xl"> Nombre de la lista: {{ $listname }} </h2>
        @foreach ($categories as $category)
            <h3> Categoría: {{ $category-->name }} </h3>
            <ul class="list-disc">
                @foreach ($listname-->items as $item)
                    @if ($item-->category_id === $category-->id)
                        <li onclick="handleClick({{ $item-->id }})"> {{ $item-->name }} </li>
                    @endif
                @endforeach
            </ul>
        @endforeach
    @endforeach
</div>
</div>

<script>
    function handleClick(params){

    }


</script>
