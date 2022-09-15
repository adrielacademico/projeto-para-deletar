<div class="container px-5 my-5">
    <form action="?page=salvarCurso" method="POST">
        
        <div class="form-floating mb-3">
            <input class="form-control" name="nome" type="text" />
            <label for="nome">Nome:</label>
        </div>

        <div class="form-floating mb-3">
            <input class="form-control" name="horario" type="text" placeholder="Nome:" />
            <label for="horario">Horário</label>
        </div>
        
        <div class="form-floating mb-3">
            <input class="form-control" name="dataDeInicio" type="date" placeholder="Data de Início:" />
            <label for="dataDeInicio">Data de Início:</label>
        </div>
        
        <div class="form-floating mb-3">
            <input class="form-control" name="dataDeConclusao" type="date" placeholder="Data de Conclusão:" />
            <label for="dataDeConclusao">Data de Conclusão:</label>
        </div>

        <div class="form-floating mb-3">
            <select class="form-select" name="ativo" aria-label="Ativo:">
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
            <label for="ativo">Ativo:</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" name="descricao" type="text" style="height: 10rem;"></textarea>
            <label for="descricao">Descrição:</label>
        </div>

        <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit">
                Cadastrar Curso   
            </button>
        </div>

    </form>
</div>