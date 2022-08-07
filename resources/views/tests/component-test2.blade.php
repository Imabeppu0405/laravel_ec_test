<x-tests.app>
    <x-slot name="header">ヘッダー２</x-slot>
    コンポーネントテスト2
    <div class="mb-4"></div>
    <x-test-class-base classBaseMessage='メッセージです' defaultMessage="初期値から変更しています">
        スロットです
        <x-slot name="header">ヘッダー１</x-slot>
    </x-test-class-base>
</x-tests.app>