<?php

class RankingTable
{
    public function __construct(array $players)
    {
        $this->standings = [];
        foreach ($players as $index => $p) {
            $this->standings[$p] = [
                'index'        => $index,
                'games_played' => 0,
                'score'        => 0
            ];
        }
    }

    public function recordResult(string $player, int $score): void
    {
        $this->standings[$player]['games_played']++;
        $this->standings[$player]['score'] += $score;
    }

    public function playerRank(int $rank): string
    {
        $rankings = $this->standings;

        uasort($rankings, function ($a, $b) {

            if ($a['score'] < $b['score']) {
                return 1;
            }


            if ($a['score'] > $b['score']) {
                return -1;
            }


            if ($a['games_played'] > $b['games_played']) {
                return 1;
            }


            if ($a['games_played'] < $b['games_played']) {
                return -1;
            }


            return $a['index'] > $b['index'] ? 1 : -1;
        });


        $ranks = array_keys($rankings);


        return $ranks[--$rank];
    }
}

$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 2);
$table->recordResult('Maks', 3);
$table->recordResult('Monika', 5);

echo $table->playerRank(1);
