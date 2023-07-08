<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8">
        <x-heading title="Vendas" description="Listar todos as vendas" btnLabel="Adicionar Vendas"
            :route=" route('sales.create')"></x-heading>

            <div class="w-full overflow-hidden md:rounded-lg">
                <livewire:table
                    resource="Sale"
                    :columns="[
                    ['label' => 'Seller', 'column' => 'seller.user.name'],
                    ['label' => 'Client','column' => 'client.user.name'],
                    ['label' => 'Solod at', 'column' => 'sold_at'],
                    ['label' => 'Status', 'column' => 'status'],
                    ['label' => 'Total Amount', 'column' => 'total_amount'],
                ]
                "   edit="clients.edit"
                    delete="clients.destroy"
                ></livewire:table>

        </div>
    </div>
</x-app-layout>
