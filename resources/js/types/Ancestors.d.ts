export interface Ancestor {
    id: number | string;
    first_name: string;
    last_name: string;
    relationship: string;
    birth_date: string | number | null;
    birth_place?: string;
    death_date?: string | number | null;
    death_place?: string | null;
    bio: string | null;
}

//    $table->id();
//             $table->string('first_name');
//             $table->string('last_name');
//             $table->string('relationship'); // Abuelo, Bisabuelo, etc.
//             $table->date('birth_date')->nullable();
//             $table->string('birth_place')->nullable(); // Ej: Teglio, Italia
//             $table->date('death_date')->nullable();
//             $table->text('bio')->nullable(); // Aquí va la historia de los Lorenzini
//             $table->timestamps();
