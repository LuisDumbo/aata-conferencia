<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Programa Oficial | 16.a Reuniao da Regiao Africa da IFATSEA')]
class SchedulePage extends Component
{
    public string $title = 'Programa Oficial';

    public string $subtitle = 'Agenda preliminar da 16.a Reuniao da Regiao Africa da IFATSEA, organizada para delegados, palestrantes e parceiros institucionais.';

    public string $selectedDay = '2026-06-23';

    public array $programme = [];

    public function mount(): void
    {
        $this->programme = [
            '2026-06-23' => [
                'label' => '23 de Junho',
                'day' => 'Terça-feira',
                'theme' => 'Abertura institucional e alinhamento regional',
                'focus' => 'Sessões protocolares, visão estratégica da regiao e prioridades para a modernizacao dos sistemas CNS/ATM.',
                'sessions' => [
                    [
                        'time' => '08:00 - 09:00',
                        'track' => 'Credenciacao',
                        'title' => 'Recepcao e acreditacao dos delegados',
                        'speaker' => 'Secretariado AATA',
                        'location' => 'Foyer Principal',
                        'type' => 'Recepcao',
                        'summary' => 'Entrega de materiais oficiais, confirmacao de presencas e acolhimento das delegacoes internacionais.',
                    ],
                    [
                        'time' => '09:00 - 10:30',
                        'track' => 'Plenaria',
                        'title' => 'Sessao solene de abertura',
                        'speaker' => 'Comissao Organizadora e Autoridades Convidadas',
                        'location' => 'Sala Diamante',
                        'type' => 'Plenaria',
                        'summary' => 'Boas-vindas institucionais, apresentacao do tema central e enquadramento oficial da reuniao regional.',
                    ],
                    [
                        'time' => '11:00 - 12:30',
                        'track' => 'Governanca',
                        'title' => 'Estado actual da Regiao Africa da IFATSEA',
                        'speaker' => 'Conselho Regional IFATSEA',
                        'location' => 'Sala Diamante',
                        'type' => 'Painel',
                        'summary' => 'Revisao dos principais indicadores, desafios operacionais e linhas de coordenacao entre associacoes-membro.',
                    ],
                    [
                        'time' => '14:00 - 15:30',
                        'track' => 'Estrategia',
                        'title' => 'Mesa-redonda sobre seguranca operacional e resiliencia tecnica',
                        'speaker' => 'Moderacao: Especialistas CNS/ATM',
                        'location' => 'Sala Imbondeiro',
                        'type' => 'Mesa-redonda',
                        'summary' => 'Debate sobre continuidade de servico, gestao de risco tecnico e maturidade organizacional nos ANSPs africanos.',
                    ],
                    [
                        'time' => '16:00 - 17:30',
                        'track' => 'Networking',
                        'title' => 'Sessao de integracao entre delegacoes e parceiros',
                        'speaker' => 'Delegados e Patrocinadores',
                        'location' => 'Terraco Executivo',
                        'type' => 'Networking',
                        'summary' => 'Espaco para encontros institucionais, articulacao de iniciativas e aproximacao entre participantes.',
                    ],
                ],
            ],
            '2026-06-24' => [
                'label' => '24 de Junho',
                'day' => 'Quarta-feira',
                'theme' => 'Transformacao tecnologica e excelencia tecnica',
                'focus' => 'Blocos tecnicos dedicados a infraestruturas, interoperabilidade, ciberseguranca e manutencao de sistemas criticos.',
                'sessions' => [
                    [
                        'time' => '08:30 - 09:15',
                        'track' => 'Keynote',
                        'title' => 'Panorama africano da modernizacao CNS/ATM',
                        'speaker' => 'Orador Principal Internacional',
                        'location' => 'Sala Diamante',
                        'type' => 'Conferencia',
                        'summary' => 'Visao regional sobre investimento, interoperabilidade e preparo tecnico para a proxima decada.',
                    ],
                    [
                        'time' => '09:30 - 11:00',
                        'track' => 'Tecnico',
                        'title' => 'Arquitecturas de manutencao para sistemas mission critical',
                        'speaker' => 'Painel de Engenheiros ATSEP',
                        'location' => 'Sala Imbondeiro',
                        'type' => 'Painel tecnico',
                        'summary' => 'Boas praticas para disponibilidade, redundancia, suporte ao ciclo de vida e resposta a incidentes.',
                    ],
                    [
                        'time' => '11:30 - 12:30',
                        'track' => 'Ciberseguranca',
                        'title' => 'Proteccao de infraestruturas ATM e superficies de ataque',
                        'speaker' => 'Especialistas em seguranca de sistemas',
                        'location' => 'Sala Baia',
                        'type' => 'Workshop',
                        'summary' => 'Abordagem pratica para governanca de acessos, monitorizacao e defesa de ambientes operacionais.',
                    ],
                    [
                        'time' => '14:00 - 15:30',
                        'track' => 'Inovacao',
                        'title' => 'Automacao, observabilidade e suporte a decisao tecnica',
                        'speaker' => 'Fabricantes e provedores tecnologicos',
                        'location' => 'Sala Diamante',
                        'type' => 'Demo session',
                        'summary' => 'Casos de uso sobre telemetria, diagnostico proactivo e plataformas de supervisao tecnica.',
                    ],
                    [
                        'time' => '16:00 - 17:15',
                        'track' => 'Formacao',
                        'title' => 'Competencias criticas para ATSEPs na nova geracao de sistemas',
                        'speaker' => 'Academias e centros de treino',
                        'location' => 'Sala Imbondeiro',
                        'type' => 'Forum',
                        'summary' => 'Discussao sobre trilhas de certificacao, requalificacao e desenvolvimento continuo de equipas tecnicas.',
                    ],
                ],
            ],
            '2026-06-25' => [
                'label' => '25 de Junho',
                'day' => 'Quinta-feira',
                'theme' => 'Cooperacao regional, talento e sustentabilidade',
                'focus' => 'Agenda voltada a colaboracao entre estados, gestao de talento, sustentabilidade operacional e programas comuns.',
                'sessions' => [
                    [
                        'time' => '08:30 - 09:30',
                        'track' => 'Cooperacao',
                        'title' => 'Modelos de colaboracao entre ANSPs e reguladores',
                        'speaker' => 'Representantes institucionais regionais',
                        'location' => 'Sala Diamante',
                        'type' => 'Painel executivo',
                        'summary' => 'Estruturas de articulacao para partilha de capacidades, interoperabilidade e respostas coordenadas.',
                    ],
                    [
                        'time' => '10:00 - 11:15',
                        'track' => 'Capital humano',
                        'title' => 'Atraccao e retencao de talento tecnico',
                        'speaker' => 'Lideres de RH e engenharia',
                        'location' => 'Sala Imbondeiro',
                        'type' => 'Forum',
                        'summary' => 'Estrategias para sucessao tecnica, equilibrio geracional e fortalecimento de equipas de alta especializacao.',
                    ],
                    [
                        'time' => '11:30 - 12:30',
                        'track' => 'Sustentabilidade',
                        'title' => 'Operacoes mais eficientes e infraestruturas sustentaveis',
                        'speaker' => 'Especialistas em energia e infraestruturas',
                        'location' => 'Sala Baia',
                        'type' => 'Sessao tematica',
                        'summary' => 'Boas praticas para eficiencia energetica, resiliencia de instalacoes e continuidade operacional.',
                    ],
                    [
                        'time' => '14:00 - 15:00',
                        'track' => 'Associativismo',
                        'title' => 'Reunioes tecnicas das associacoes-membro',
                        'speaker' => 'Delegacoes nacionais',
                        'location' => 'Salas de Comissao',
                        'type' => 'Sessao paralela',
                        'summary' => 'Espacos reservados para alinhamento interno, definicao de posicoes e preparacao de propostas regionais.',
                    ],
                    [
                        'time' => '19:00 - 21:30',
                        'track' => 'Protocolo',
                        'title' => 'Jantar oficial da reuniao regional',
                        'speaker' => 'Convidados oficiais',
                        'location' => 'Sala Baia de Luanda',
                        'type' => 'Evento social',
                        'summary' => 'Momento institucional de convivio, homenagem aos participantes e reforco das relacoes entre delegacoes.',
                    ],
                ],
            ],
            '2026-06-26' => [
                'label' => '26 de Junho',
                'day' => 'Sexta-feira',
                'theme' => 'Decisoes, encaminhamentos e encerramento',
                'focus' => 'Consolidacao das recomendacoes, leitura do comunicado final e preparacao do ciclo seguinte.',
                'sessions' => [
                    [
                        'time' => '08:30 - 10:00',
                        'track' => 'Relatoria',
                        'title' => 'Apresentacao das conclusoes dos grupos tecnicos',
                        'speaker' => 'Relatores das comissoes',
                        'location' => 'Sala Diamante',
                        'type' => 'Plenaria',
                        'summary' => 'Sintese das recomendacoes produzidas ao longo da semana e enquadramento para deliberacao final.',
                    ],
                    [
                        'time' => '10:30 - 12:00',
                        'track' => 'Governanca',
                        'title' => 'Aprovacao das resolucoes e plano de seguimento',
                        'speaker' => 'Mesa da reuniao regional',
                        'location' => 'Sala Diamante',
                        'type' => 'Sessao deliberativa',
                        'summary' => 'Validacao de prioridades, responsabilidades e mecanismos de acompanhamento intersessional.',
                    ],
                    [
                        'time' => '12:15 - 13:00',
                        'track' => 'Encerramento',
                        'title' => 'Leitura do comunicado final e cerimonia de encerramento',
                        'speaker' => 'Comissao Organizadora',
                        'location' => 'Sala Diamante',
                        'type' => 'Cerimonia',
                        'summary' => 'Mensagem final aos participantes, agradecimentos institucionais e indicacoes para o proximo encontro.',
                    ],
                ],
            ],
        ];
    }

    public function selectDay(string $day): void
    {
        if (array_key_exists($day, $this->programme)) {
            $this->selectedDay = $day;
        }
    }

    public function getActiveDayProperty(): array
    {
        return $this->programme[$this->selectedDay] ?? reset($this->programme);
    }

    public function render()
    {
        return view('livewire.pages.schedule-page');
    }
}