<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8">
        <x-heading title="Cliente" description="Listar todos os clientes" btnLabel="Adicionar Cliente"
            :route=" route('clients.create')"></x-heading>

            <div class="w-full overflow-hidden md:rounded-lg">
                <livewire:table
                    resource="Client"
                    :columns="[
                    ['label' => 'Client', 'column' => 'user.name'],
                    ['label' => 'Email','column' => 'user.email'],
                    ['label' => 'City', 'column' => 'address.city'],
                    ['label' => 'State', 'column' => 'address.state'],
                ]
                "   edit="clients.edit"
                    delete="clients.destroy"
                ></livewire:table>

        </div>
    </div>
</x-app-layout>
