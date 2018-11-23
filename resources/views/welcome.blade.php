<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <h1>Cadastro</h1>
    <h5>Os campos com * são de preenchimento obrigatório</h5>
    <form class="container" action="/public/adiciona" method="POST">
        @csrf
        <div class="form-group">
          <label for="nome">Nome Completo *</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required>
        </div>
        <div class="form-group">
          <label for="data">Data de Nascimento *</label>
          <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF *</label>
            <input type="text" class="form-control" onblur="TestaCPF(this)" id="cpf" name="cpf" placeholder="999.999.999-99" required>
        </div>
        <div class="form-group">
            <label for="cep">CEP *</label>
            <input type="text" class="form-control" onblur="pesquisacep(this.value);" id="cep" name="cep" placeholder="00000-000" required>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço *</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço" required>
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o número">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro *</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required>
        </div>
        <div class="form-group">
            <label for="cidade">Cidade *</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado *</label>
            <select class="dropdown" id="estado" name="estado" required>
                <option value="acre">Acre</option>
                <option value="amazonas">Amazonas</option>
                <option value="para">Pará</option>
                <option value="rondonia">Rondônia</option>
                <option value="roraima">Roraima</option>
                <option value="tocantins">Tocantins</option>
                <option value="amapa">Amapá</option>
                <option value="maranhao">Maranhão</option>
                <option value="piaui">Piauí</option>
                <option value="ceara">Ceará</option>
                <option value="rio-grande-do-norte">Rio Grande do Norte</option>
                <option value="paraiba">Paraíba</option>
                <option value="pernambuco">Pernambuco</option>
                <option value="alagoas">Alagoas</option>
                <option value="sergipe">Sergipe</option>
                <option value="bahia">Bahia</option>
                <option value="minas-gerais">Minas Gerais</option>
                <option value="espirito-santo">Espírito Santo</option>
                <option value="rio-de-janeiro">Rio de Janeiro</option>
                <option value="sao-paulo">São Paulo</option>
                <option value="mato-grosso">Mato Grosso</option>
                <option value="mato-grosso-do-sul">Mato Grosso do Sul</option>
                <option value="goias">Goiás</option>
                <option value="distrito-federal">Distrito Federal</option>
                <option value="parana">Paraná</option>
                <option value="santa-catarina">Santa Catarina</option>
                <option value="rio-grande-do-sul">Rio Grande do Sul</option>
            </select>
        </div>
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Casa, travessa...">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="../js/bootstrap.js"></script>
    <script>
        const limpa_formulário_cep = () => document.getElementById('endereco').value=("");

        const meu_callback = (conteudo) => {
            if (!("erro" in conteudo)) {
                document.getElementById('endereco').value=(conteudo.logradouro);
            }
            else {
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }
            
        const pesquisacep = (valor) => {

            let cep = valor.replace(/\D/g, '');

            if (cep != "") {

                let validacep = /^[0-9]{8}$/;

                if(validacep.test(cep)) {

                    document.getElementById('endereco').value="...";

                    let script = document.createElement('script');

                    script.src = `https://viacep.com.br/ws/${cep}/json/?callback=meu_callback`;

                    document.body.appendChild(script);
                }
                else {
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            }
            else {
                limpa_formulário_cep();
            }
        };

        // Validando CPF
        
        function TestaCPF(elemento) {
            cpf = elemento.value;
            cpf = cpf.replace(/[^\d]+/g, '');
            if (cpf == '') return alert('CPF inválido');
                
            if (cpf.length != 11 ||
                cpf == "00000000000" ||
                cpf == "11111111111" ||
                cpf == "22222222222" ||
                cpf == "33333333333" ||
                cpf == "44444444444" ||
                cpf == "55555555555" ||
                cpf == "66666666666" ||
                cpf == "77777777777" ||
                cpf == "88888888888" ||
                cpf == "99999999999")
                return alert('CPF inválido');

            add = 0;
            for (i = 0; i < 9; i++)
                add += parseInt(cpf.charAt(i)) * (10 - i);
            rev = 11 - (add % 11);
            if (rev == 10 || rev == 11)
                rev = 0;
            if (rev != parseInt(cpf.charAt(9)))
            return alert('CPF inválido')
            add = 0;
            for (i = 0; i < 10; i++)
                add += parseInt(cpf.charAt(i)) * (11 - i);
            rev = 11 - (add % 11);
            if (rev == 10 || rev == 11)
                rev = 0;
            if (rev != parseInt(cpf.charAt(10))) {
                return alert('CPF inválido');
            } else {
                return alert('CPF válido');
            }
        }
    </script>
</body>
</html>
