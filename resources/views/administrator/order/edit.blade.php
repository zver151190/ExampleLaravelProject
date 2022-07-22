<x-administrator-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Редактирование заказа #{{ $order->id }}</h1>
                    <h1>Лоты</h1>
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <tr class="text-center font-bold">
                            <th class="border px-6 py-4">ID</th>
                            <th class="border px-6 py-4">Заголовок</th>
                            <th class="border px-6 py-4">Пользователь</th>
                            <th class="border px-6 py-4">Статус</th>
                        </tr>
                        @foreach($order->products as $product)
                            <tr>
                                <td class="border px-6 py-4">{{ $product->id }}</td>
                                <td class="border px-6 py-4">{{ $product->title }}</td>
                                <td class="border px-6 py-4">
                                    {{ $product->user->email }} <br>
                                    {{ $product->user->phone }}
                                </td>
                                <td class="border px-6 py-4">{{ $product->status->title }}</td>
                                <td class="border px-6 py-4">{{ $product->updated_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <h1>Комментарий пользователя</h1>
                    {{ $order->comment }}
                </div>
            </div>
        </div>
    </div>
</x-administrator-layout>
