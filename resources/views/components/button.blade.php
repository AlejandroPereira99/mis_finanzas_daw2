<div>
    @if (key($datosBoton) == "enlace")
        <a href={{$datosBoton["enlace"]}}><button class="bg-black text-white p-2 rounded">Enlace</button></a>
    @else
        <input class="bg-black text-white p-2 rounded" value="Input"/>    
    @endif
</div>