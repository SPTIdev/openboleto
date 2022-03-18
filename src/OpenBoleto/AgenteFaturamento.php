<?php

namespace OpenBoleto;

/**
 * Classe de agente de dados do faturamento Unimed (Unicred)
 *
 * @package    OpenBoleto
 * @author     Felipe Damasio <http://github.com/DevFelipe10>
 * @copyright  Copyright (c) 2013 Estrada Virtual (http://www.estradavirtual.com.br)
 * @license    MIT License
 * @version    1.0
 */

class AgenteFaturamento
{
    /**
     * @var string
     */
    protected $classe;
    /**
     * @var string
     */
    protected $qte;
    /**
     * @var string
     */
    protected $unitario;
    /**
     * @var string
     */
    protected $total;

    /**
     * Construtor
     *
     * @param string $classe
     * @param string $qte
     * @param string $unitario
     * @param string $total
     */
    public function __construct($classe = '', $qte = '', $unitario = '', $total = '')
    {
        $this->setClasse($classe);
        $this->setQte($qte);
        $this->setUnitario($unitario);
        $this->setTotal($total);
    }

    /**
     * Define a classe
     *
     * @param string $classe
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    /**
     * Retorna a classe
     *
     * @return string
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Define a quantidade
     *
     * @param string $qte
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

    /**
     * Retorna a quantidade
     *
     * @return string
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Define o unitario
     *
     * @param string $unitario
     */
    public function setUnitario($unitario)
    {
        $this->unitario = $unitario;
    }

    /**
     * Retorna a unitario
     *
     * @return string
     */
    public function getUnitario()
    {
        return $this->unitario;
    }

    /**
     * Define o total
     *
     * @param string $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * Retorna a total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }
}
