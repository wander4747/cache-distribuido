# Cache distribuido

O cache é uma técnica amplamente utilizada em desenvolvimento de software para melhorar o 
desempenho e a eficiência das aplicações. Existem várias estratégias de cache com diferentes
abordagens para armazenar e recuperar dados. 

Neste documento, vou abordar seis dessas estratégias: Cache Aside/Read Through, Write Through,
Write Around, Write Back e Pre Caching.


### Pre caching data

No Pre caching dataarmazenar dados no cache antes de serem solicitados pela aplicação. 
Isso reduz o tempo de resposta quando os dados são necessários.

![Pre caching data](/etc/pre-caching-data.png "Pre caching data")


### Cache Aside

No padrão Cache Aside quando a aplicação precisa de dados, ela primeiro verifica o cache. 
Se os dados estiverem presentes no cache, são retornados imediatamente. Se os dados não 
estiverem no cache, eles serão recuperados do banco de dados e armazenados no cache para 
uso futuro.

![Cache Aside](/etc/cache-aside.png "Cache Aside")

### Write Through

No padrão Write Through os dados são gravados no cache e no banco de dados ao mesmo tempo. 
Quando os dados são atualizados, eles são gravados no cache e no banco de dados simultaneamente. 
Isso garante que o cache sempre contenha dados atualizados, mas pode retardar as operações de gravação

![Cache Aside](/etc/write-through.png "Write Through")

### Write Back

No padrão Write Back os dados são gravados no cache e posteriormente no banco de dados de forma assícrona.

![Cache Aside](/etc/write-back.png "Write Back")

### Write Around

No padrão Write Around os dados são gravados no banco de dados, lêem do cache se houver dados, caso contrário, 
obtém do banco de dados e atualiza o cache.

![Cache Aside](/etc/write-around.png "Write Around")
