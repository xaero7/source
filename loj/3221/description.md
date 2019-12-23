
# 题目描述

**题目译自 [PA 2019](https://sio2.mimuw.edu.pl/c/pa-2019-1/dashboard/) Runda 4 [Szprotki i szczupaki](https://sio2.mimuw.edu.pl/c/pa-2019-1/p/sis/)**

在湖中有 $ n $ 条小鱼，第 $ i $ 条小鱼的重量为 $ w_i $，$ q $ 个操作，每个操作是下面 $ 3 $ 种之一：

+ $1$ $ s $ $ k $：假如现在来了一条重量为 $ s $ 的大鲨鱼，它的目标是让自己的重量达到至少 $ k $，问它至少需要吃掉多少条小鱼？如果鲨鱼当前的重量严格大于要吃掉的小鱼的重量 $ w $，那么它可以吃掉这条小鱼，并使得自己的重量增加 $ w $。
+ $2$ $w$：添加一条重量为 $ w $ 的小鱼。
+ $3$ $w$：删除一条重量为 $ w $ 的小鱼，保证存在至少一条这样的小鱼。

# 输入格式

第一行一个正整数 $ n $。

第二行 $ n $ 个正整数 $ w_1, w_2, \dots, w_n $。

第三行一个正整数 $ q $。接下来 $ q $ 行，每行若干个整数，描述一个操作，格式如题面所述。

# 输出格式

对于每个编号为 $ 1 $ 的操作，输出最后结果。如果不能让大鲨鱼的体重达到至少 $ k $，则输出 $ -1 $。

# 样例

#### 样例输入
```plain
4
1 4 8 1
15
1 2 3
1 2 4
1 2 5
1 3 3
1 3 5
1 3 16
1 4 16
1 8 17
1 100 101
1 100 115
1 3 9
2 2
1 3 9
3 4
1 3 9
```
#### 样例输出
```plain
1
2
-1
0
2
4
3
2
1
-1
3
2
-1
```

# 数据范围与提示

$ 1 \le n \le 3\times 10^5, 1 \le q \le 10^5, 1 \le w_i, w \le 10^{12}, 1 \le s, k \le 10^{18} $
