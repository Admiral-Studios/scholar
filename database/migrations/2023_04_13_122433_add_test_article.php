<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        \App\Models\Article::create([
            'subject' => 'Lorem Ipsum',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam luctus libero dictum nisl maximus cursus. Vestibulum turpis sapien, sodales a semper sit amet, pellentesque non diam. Praesent eget magna rhoncus, luctus justo pharetra, ultricies orci. Etiam posuere a justo vel sagittis. Fusce suscipit vulputate risus at iaculis. Nunc vel nisi eget dolor iaculis condimentum. Cras finibus pulvinar nibh et elementum. Donec vitae porta ex. Integer non lectus nulla. Aliquam ut velit pellentesque, consequat orci non, pellentesque ex.</p>'
                . '<p>Cras maximus ante eu sapien faucibus vestibulum. Donec non faucibus massa, in egestas nisi. Ut id ipsum sed lorem laoreet lobortis quis quis ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse viverra tortor ac aliquam dictum. Phasellus mi magna, fermentum quis dapibus sed, sodales sed erat. Pellentesque facilisis ipsum pulvinar congue aliquet. Sed placerat lectus dictum consequat finibus. Cras libero nibh, pellentesque quis ullamcorper et, mattis quis sem. In hac habitasse platea dictumst. Curabitur tincidunt magna mi, sit amet mattis metus sagittis ac. Aenean lorem tortor, pharetra non tempor in, rutrum eget libero.</p>'
                . '<p>Fusce lobortis finibus purus eu scelerisque. Praesent eget congue erat, ac auctor felis. Fusce elementum, est vitae tincidunt consectetur, erat augue porttitor ante, in placerat urna nibh at nulla. Suspendisse sodales purus nec blandit aliquet. Phasellus tristique diam vel dolor tempor, quis vulputate erat tempus. Curabitur interdum ex vel nibh euismod convallis. Vivamus ultrices sit amet libero eu convallis. Suspendisse sed elementum ipsum. Aliquam erat volutpat. Quisque dignissim efficitur magna et cursus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pellentesque lectus nec lectus mattis ultricies. Donec vitae ex quis ex ultricies sagittis. In condimentum felis ac vestibulum varius.</p>'
                . '<p>Aliquam placerat egestas sem, quis efficitur ipsum malesuada interdum. Integer luctus arcu vel libero venenatis, ut congue quam mattis. Morbi non justo in velit mattis ullamcorper. Nulla fermentum viverra erat non malesuada. Nullam erat est, bibendum eget dignissim in, ornare ut lectus. Nulla eget laoreet velit. Phasellus aliquam varius sodales. Duis mi purus, vulputate vel dictum nec, bibendum imperdiet metus. Donec ornare, nulla in feugiat laoreet, lectus tellus finibus elit, nec auctor nisi velit ut orci. Aliquam ac viverra nulla. Suspendisse fermentum, purus id venenatis gravida, arcu mi malesuada velit, id venenatis lacus mauris nec tortor. Donec ornare tellus sed dui convallis, non euismod turpis bibendum. Etiam vel ornare sem. Aliquam ligula lacus, pellentesque vitae commodo sed, euismod ut velit. Sed non venenatis magna.</p>'
                . '<p>Suspendisse dictum dictum sapien, eget gravida ante rutrum non. Integer orci velit, maximus sed pulvinar in, bibendum rhoncus turpis. Sed massa lectus, pharetra non maximus at, finibus eget mi. Ut semper lorem lacus, eget tempor lorem feugiat ut. Sed pharetra, quam rhoncus rhoncus pulvinar, elit odio venenatis velit, in fermentum diam magna id tortor. In vitae augue congue urna euismod efficitur. Quisque ut mi dapibus, dignissim nisi ac, varius dolor. Aliquam metus leo, egestas in laoreet in, malesuada eu ipsum. Nulla blandit felis nunc, non luctus metus commodo vitae. Maecenas ut tellus non felis lobortis commodo eu ac magna. Maecenas sollicitudin commodo tellus a faucibus. Aenean vestibulum nisi magna. Sed sed mattis elit, volutpat iaculis odio. Ut pharetra erat at metus elementum consectetur.</p>'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \Illuminate\Support\Facades\DB::table('articles')->truncate();
    }
};
