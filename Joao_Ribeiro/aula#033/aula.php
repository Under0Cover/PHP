<?php
    /*
        FILESYSTEM
        Vamos ver como podemos gravar um texto completo num ficheiro, e como ler esse texto completo para o interior de uma variável PHP
    */

    // Gravar o texto completo.
    $texto = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, sunt sed? Velit unde numquam magni, sapiente, architecto corrupti officia recusandae totam, vel nesciunt minima fugiat non animi cupiditate excepturi placeat. Ducimus nam quis aliquam laborum, dolor eveniet error dolores labore autem esse facere nisi quae nulla, vel ratione! Voluptas quaerat quibusdam debitis consequatur nisi vel minus totam tenetur iusto doloremque? Sunt corrupti impedit veritatis doloribus quos molestiae nobis enim facere quasi sint aliquam et quo adipisci, suscipit corporis modi commodi iusto error eligendi saepe natus eveniet voluptatem. Saepe, eum error. Consectetur magnam numquam vitae quae? Sunt aliquam repellendus magni quia voluptatum enim quas! Illo, dicta repellendus tenetur sint unde inventore minima odio sapiente, sit nemo deserunt quasi quibusdam reiciendis excepturi! Quisquam aperiam praesentium ea distinctio quibusdam est iure quas animi eaque nihil quia quidem corrupti adipisci perferendis earum in blanditiis, officiis placeat excepturi minima porro temporibus. Laboriosam molestiae veritatis eum? Reprehenderit ratione mollitia ab fuga earum. Commodi incidunt maiores est odio ipsam officia quis illum nemo tempore nostrum natus cumque suscipit autem aliquam quam in ducimus, enim quae doloremque? Adipisci. Tempore eius animi sed incidunt quasi itaque rem, recusandae esse optio pariatur odit natus sit nam provident voluptatem voluptate dignissimos aliquam consectetur officia sapiente, ut fugit repellat beatae. Commodi, earum. Molestiae ut aspernatur dolores veritatis hic. Possimus eos iusto amet recusandae. Maiores possimus architecto incidunt repellat, cupiditate corrupti neque, inventore eaque, sint tempora blanditiis libero ab amet. Nobis, quisquam perspiciatis. Doloremque maiores consequatur distinctio quae veritatis earum eum! Adipisci cumque voluptatum voluptatem optio, eaque inventore quae facere ullam harum, neque accusantium natus molestiae reprehenderit odio enim. Quas praesentium debitis magnam. Quis fuga, provident sapiente delectus itaque accusamus dolores sint tempore, voluptatibus omnis facilis vitae obcaecati soluta rerum sit? Asperiores vel, neque enim reiciendis itaque recusandae quae aliquid exercitationem ducimus voluptatem!";

    file_put_contents('texto_completo.txt', $texto);
    // Esta função é equivalente a chamar o fopen, fwrite e fclose tudo na mesma função.

    // Ler todo o conteúdo de um ficheiro para uma variável
    $texto_arquivo = file_get_contents('texto_completo.txt');
    echo $texto_arquivo;
?>