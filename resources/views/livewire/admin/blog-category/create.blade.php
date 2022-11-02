<div>
    <!-- Create Modal -->
    <x-modal wire:model="createBlogCategory">
        <x-slot name="title">
            {{ __('Create Blog Category') }}
        </x-slot>

        <x-slot name="content">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form wire:submit.prevent="create">
                <div class="flex flex-wrap -mx-3 space-y-0">
                    <div class="xl:w-1/2 md:w-1/2 px-3">
                        <x-label for="title" :value="__('Title')" />
                        <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                            wire:model.defer="blogcategory.title" />
                        <x-input-error :messages="$errors->get('blogcategory.title')" for="blogcategory.title" class="mt-2" />
                    </div>
                    <div class="xl:w-1/2 md:w-1/2 px-3">
                        <x-label for="description" :value="__('Description')" />
                        <x-input id="description" class="block mt-1 w-full" type="text" name="description"
                            wire:model.defer="blogcategory.description" />
                        <x-input-error :messages="$errors->get('blogcategory.description')" for="blogcategory.description" class="mt-2" />
                    </div>
                    <div class="xl:w-1/2 md:w-1/2 px-3">
                        <x-label for="meta_title" :value="__('Meta Title')" />
                        <x-input id="meta_title" class="block mt-1 w-full" type="text" name="meta_title"
                            wire:model.defer="blogcategory.meta_title" />
                        <x-input-error :messages="$errors->get('blogcategory.meta_title')" for="blogcategory.meta_title" class="mt-2" />
                    </div>
                    <div class="xl:w-1/2 md:w-1/2 px-3">
                        <x-label for="meta_description" :value="__('Meta Description')" />
                        <x-input id="meta_description" class="block mt-1 w-full" type="text" name="meta_description"
                            wire:model.defer="blogcategory.meta_description" />
                        <x-input-error :messages="$errors->get('blogcategory.meta_description')" for="blogcategory.meta_description" class="mt-2" />
                    </div>
                    <div class="w-full py-2 px-3">
                        <x-label for="featured" :value="__('Featured')" />
                        <input type="checkbox" name="featured" wire:model.defer="blogcategory.featured" />
                    </div>
                </div>


                <div class="mt-4 px-3 w-full">
                    <x-label for="language_id" :value="__('Language')" required />
                    <x-select-list
                        class="block bg-white dark:bg-dark-eval-2 text-gray-700 dark:text-gray-300 rounded border border-gray-300 mb-1 text-sm w-full focus:shadow-outline-blue focus:border-blue-500"
                        id="language_id" name="language_id" wire:model="blogcategory.language_id" :options="$this->listsForFields['languages']" />
                    <x-input-error :messages="$errors->get('blogcategory.language_id')" for="blogcategory.language_id" class="mt-2" />
                </div>

                <div class="w-full flex justify-start space-x-2">
                    <x-button primary wire:click="create" wire:loading.attr="disabled">
                        {{ __('Create') }}
                    </x-button>
                </div>
            </form>
        </x-slot>
    </x-modal>
    <!-- End Create Modal -->
</div>
