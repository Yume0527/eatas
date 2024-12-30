<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('食事入力') }}
        </h2>
        <script src="https://cdn.tailwindcss.com"></script>
    </x-slot>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-bladewind::tab-group name="pills-blue-tab" style="pills" class="ml-8">
                <x-slot:headings>
                    <x-bladewind::tab-heading name="morning" active="true" label="朝" />
                    <x-bladewind::tab-heading name="lunch" label="昼" />
                    <x-bladewind::tab-heading name="night" label="夜" />
                </x-slot:headings>

                <x-bladewind::tab-body>
                    <x-bladewind::tab-content name="morning" active="true">
                        <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                               <!--朝の内容を入力-->
                        </x-bladewind::card>
                        
                    </x-bladewind::tab-content>
                    <x-bladewind::tab-content name="lunch">
                        <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                               <!-- 昼の内容を入力-->
                        </x-bladewind::card>
                        
                    </x-bladewind::tab-content>
                    <x-bladewind::tab-content name="night">
                        <x-bladewind::card class="cursor-pointer hover:shadow-gray-300" style="height: auto; padding: 20px;">
                                <!--夜の内容を入力-->
                        </x-bladewind::card>
                        
                    </x-bladewind::tab-content>
                </x-bladewind::tab-body>
            </x-bladewind::tab-group>
            
        </div>
    </div>

    <!-- <script>  
        const csrfToken = document
            .querySelector("[name='csrf-token']")
            .getAttribute("content");
        async function saveRecipe(recipeName) {
            try {
                // サーバーに料理名を送信
                await fetch(' {{route("recipe.store")}}',{
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    
                    body: JSON.stringify( {  name: recipeName })
                });

                
            } catch (error) {
                console.error('料理名の保存に失敗しました:', error);
            }
        }
    </script> -->
</x-app-layout>
