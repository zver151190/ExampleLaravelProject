<x-administrator-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Лоты</h1>
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <tr class="text-center font-bold">
                            <th class="border px-6 py-4">ID</th>
                            <th class="border px-6 py-4">Заголовок</th>
                            <th class="border px-6 py-4">Пользователь</th>
                            <th class="border px-6 py-4">Номер заказа</th>
                            <th class="border px-6 py-4">Статус</th>
                            <th class="border px-6 py-4">Дата</th>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td class="border px-6 py-4">{{ $product->id }}</td>
                                <td class="border px-6 py-4">{{ $product->title }}</td>
                                <td class="border px-6 py-4">
                                    {{ $product->user->email }} <br>
                                    {{ $product->user->phone }}
                                </td>
                                <td class="border px-6 py-4">
                                    @if(isset($product->order->id))
                                        <a href="{{ route('order.edit', ['order' => $product->order->id]) }}">
                                            {{ $product->order->id }}
                                        </a>
                                    @else
                                        Отсутствует
                                    @endif
                                </td>
                                <td class="border px-6 py-4">{{ $product->status->title }}</td>
                                <td class="border px-6 py-4">{{ $product->updated_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <br>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</x-administrator-layout>
