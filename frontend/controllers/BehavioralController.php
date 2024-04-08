<?php

namespace frontend\controllers;

use frontend\DesignPatterns\Behavioral\Classes\Employee;
use frontend\DesignPatterns\Behavioral\Classes\PrizeCalculatorFactory;
use yii\web\Controller;

class BehavioralController extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    public function actionStrategy(PrizeCalculatorFactory $prizeCalculatorFactory): string
    {
        $employeesWithDaysWorked = [
            [new Employee('John', true), 20],
            [new Employee('Mary', false), 30],
            [new Employee('Richard', false), 33],
        ];

        $prizes = array_reduce(
            $employeesWithDaysWorked,
            function (array $carry, array $item) use ($prizeCalculatorFactory) {
                /** @var Employee $employee */
                $employee = $item[0];
                $strategy = $prizeCalculatorFactory->getStrategy($item[0]);
                $carry[] = [
                    'name' => $employee->getName(),
                    'is boss' => $employee->isBoss() ? 'yes' : 'no',
                    'strategy' => get_class($strategy),
                    'prize' => $strategy->calculate($item[1]),
                ];

                return $carry;
            },
            []
        );

        return $this->render('strategy', compact('prizes'));
    }
}