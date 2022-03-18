<?php

namespace OpenBoleto;

/**
 * Classe de agente pré pagamento Unimed (Unicred)
 *
 * @package    OpenBoleto
 * @author     Felipe Damasio <http://github.com/DevFelipe10>
 * @copyright  Copyright (c) 2013 Estrada Virtual (http://www.estradavirtual.com.br)
 * @license    MIT License
 * @version    1.0
 */

class AgentePrePagamento
{
    /**
     * @var string
     */
    protected $nome;
    /**
     * @var string
     */
    protected $idade;
    /**
     * @var string
     */
    protected $inicioVigencia;
    /**
     * @var string
     */
    protected $valorAnterior;
    /**
     * @var string
     */
    protected $valorMensalidade;
    /**
     * @var string
     */
    protected $registroAns;
    /**
     * @var string
     */
    protected $proxReajuste;
    /**
     * @var string
     */
    protected $observacao;

    /**
     * Construtor
     *
     * @param string $nome
     * @param string $idade
     * @param string $inicioVigencia
     * @param string $valorAnterior
     * @param string $valorMensalidade
     * @param string $registroAns
     * @param string $proxReajuste
     * @param string $observacao
     */
    public function __construct($nome = '', $idade = '', $inicioVigencia = '', $valorAnterior = '', $valorMensalidade = '', $registroAns = '', $proxReajuste = '', $observacao = '')
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setInicioVigencia($inicioVigencia);
        $this->setValorAnterior($valorAnterior);
        $this->setValorMensalidade($valorMensalidade);
        $this->setRegistroAns($registroAns);
        $this->setProxReajuste($proxReajuste);
        $this->setObservacao($observacao);
    }

    /**
     * Define o nome
     *
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Retorna a nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Define a idade
     *
     * @param string $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * Retorna a idade
     *
     * @return string
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Define o inicioVigencia
     *
     * @param string $inicioVigencia
     */
    public function setInicioVigencia($inicioVigencia)
    {
        $this->inicioVigencia = $inicioVigencia;
    }

    /**
     * Retorna a inicioVigencia
     *
     * @return string
     */
    public function getInicioVigencia()
    {
        return $this->inicioVigencia;
    }

    /**
     * Define o valorAnterior
     *
     * @param string $valorAnterior
     */
    public function setValorAnterior($valorAnterior)
    {
        $this->valorAnterior = $valorAnterior;
    }

    /**
     * Retorna a valorAnterior
     *
     * @return string
     */
    public function getValorAnterior()
    {
        return $this->valorAnterior;
    }

    /**
     * Define o valorMensalidade
     *
     * @param string $valorMensalidade
     */
    public function setValorMensalidade($valorMensalidade)
    {
        $this->valorMensalidade = $valorMensalidade;
    }

    /**
     * Retorna a valorMensalidade
     *
     * @return string
     */
    public function getValorMensalidade()
    {
        return $this->valorMensalidade;
    }

    /**
     * Define o registroAns
     *
     * @param string $registroAns
     */
    public function setRegistroAns($registroAns)
    {
        $this->registroAns = $registroAns;
    }

    /**
     * Retorna a registroAns
     *
     * @return string
     */
    public function getRegistroAns()
    {
        return $this->registroAns;
    }

    /**
     * Define o proxReajuste
     *
     * @param string $proxReajuste
     */
    public function setProxReajuste($proxReajuste)
    {
        $this->proxReajuste = $proxReajuste;
    }

    /**
     * Retorna a proxReajuste
     *
     * @return string
     */
    public function getProxReajuste()
    {
        return $this->proxReajuste;
    }

    /**
     * Define o observacao
     *
     * @param string $observacao
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
    }

    /**
     * Retorna a observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }
}
