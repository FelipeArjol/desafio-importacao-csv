<div>
    @foreach($this->imports as $import)
    <div class="class p-6">
        <div>
            <h2 class="class font-medium">Importando {{ $import->file_name}}</h2>
            <span class="class text-gray-700 text-sm">Importado {{ $import->processed_rows}}/{{ $import->total_rows}}</span>

            <div class="class w-full bg-indigo-100 rounded">
                <div class="class mt-2 w-full bg-indigo-500 rounded h-2" style="{{ $import->percentageComplete() }}%;"></div>
            </div>
        </div>
    </div>
    @endforeach
</div>
