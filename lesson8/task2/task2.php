<?php
// 1. Поиск элемента массива с известным индексом считаю что сложность О(1). Причина потому что мы можем обратиться по индексу,
// если считать что все же нужен именно поиск c с переборкой массива и сравнением по индексу то O(N)
// 2. Дублирование массива и переборка через foreach O(2N),т.к. выполняется сразу 2 операции.
// 3. Рекурсивная функция заполняет стек вызовов, но при этом не переполняет ячейку памяти и после завершения выгружается из стека.
// Предположу, что сложность O(N^N),  но так как происходит освобождение памяти сложность O(N)