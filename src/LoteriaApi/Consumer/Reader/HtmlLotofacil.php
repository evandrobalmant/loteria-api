<?php

namespace LoteriaApi\Consumer\Reader;

class HtmlLotofacil extends AbstractReaderHtmlLoteria
{
    public function getData()
    {
        $this->numbersNode->setNumberConcurso(0)
            ->setDataConcurso(1)
            ->setDezenasConcurso([2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16])
            ->setArrecadacaoConcurso(17)
            ->setTotalGanhadoresConcurso(18)
            ->setValorAcumuladoConcurso(32)
            ->setFaixasPremiosConcurso([18,25,21,26,22,27,23,28,24,29]);

        parent::loadData($this->numbersNode);

        return $this->data;
    }
}
