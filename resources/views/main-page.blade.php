<x-app-layout>
    @if(isset($notification))
        <order-success>
        </order-success>
    @endif
    <main-view>
        @foreach($goods as $good)
            <good-card :good = "{{json_encode($good)}}"></good-card>
        @endforeach
    </main-view>
</x-app-layout>


