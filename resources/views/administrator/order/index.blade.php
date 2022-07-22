<x-administrator-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Заказы</h1>
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <tr class="text-center font-bold">
                            <th class="border px-6 py-4">ID</th>
                            <th class="border px-6 py-4">Комментарий пользователя</th>
                            <th class="border px-6 py-4">Комментарий администратора</th>
                            <th class="border px-6 py-4">Количество лотов</th>
                            <th class="border px-6 py-4">Трек номер</th>
                            <th class="border px-6 py-4">Статус</th>
                            <th class="border px-6 py-4">Дата</th>
                        </tr>
                        @foreach($orders as $order)
                            <tr>
                                <td class="border px-6 py-4">
                                    <a href="{{ route('order.edit', ['order' => $order->id]) }}">
                                        {{ $order->id }}
                                    </a>
                                </td>
                                <td class="border px-6 py-4">{{ $order->user_comment }}</td>
                                <td class="border px-6 py-4">{{ $order->administrator_comment }}</td>
                                <td class="border px-6 py-4">{{ count($order->products ?? 0) }}</td>
                                <td class="border px-6 py-4">{{ $order->track_number }}</td>
                                <td class="border px-6 py-4">{{ $order->status->title }}</td>
                                <td class="border px-6 py-4">{{ $order->updated_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <br>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
</x-administrator-layout>
