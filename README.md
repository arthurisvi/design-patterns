# Design Patterns
````O conteúdo desse repositório se baseia nos escritos do livro PHP - Programando com Orientação a Objetos - 4ª edição de Pablo Dall'Oglio```

Conforme o arquiteto Christhoper Alexander, em seu livro A Pattern Language: "Um pattern descreve um problema que ocorre com frequência em nosso ambiente, e então explica a essência da solução para esse problema, de forma que tal solução possa ser utilizada milhões de outras vezes, sem ao menos repeti-la uma única vez."

No contexto do desenvolvimento de software, um Design Pattern descreve formas de comunicação e relacionamento entre objetos e classes de maneira a solucionar determinados problemas de projeto (pág 134, p.5). Assim, podem ser definidos como uma espécie de catálogo para tais soluções, provendo um nome, um contexto e uma solução genérica que possa ser reutilizada (pág 135, p.1). 

## Singleton

* Quando for necessário compartilhar algumas informações no domínio da aplicação, tornando as visíveis de maneira "global" no sistema.
* Permite que um objeto fique disponível para toda a aplicação, sem perder o encapsulamento.
* Garante que seja criado apenas um objeto de determinada classe e compartilha esse objeto com diferentes partes (métodos) da aplicação.
