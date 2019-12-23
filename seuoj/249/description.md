
# 题目描述

小雅米想要建造一排摩天大厦，其中从左到右第 $i$ 座摩天大厦的高度为 $a_i$，一共 $n$ 座 。小雅米有无数块橡皮泥，每块橡皮泥可以使一座摩天大厦的高度增加 $2$，或者使相邻两座摩天大厦高度增加 $1$。在仅使用这种橡皮泥的情况下，小雅米是否能完成这个任务？

# 输入格式

第一行一个正整数 $T(1 \leq T \leq 30)$ 代表测试数据组数

每组测试数据第一行一个正整数 $n(1 \leq n \leq 10^5)$，代表有 $n$ 座摩天大厦。

下面一行 $n$ 个非负整数 $a_i(0\leq a_i \leq 10^9)$ ，代表每一座摩天大厦的高度。

# 输出格式

一共 $T$ 行,第 $i$ 行代表第 $i$ 个测试数据的结果，可以输出 `"YES"` 否则输出 `"NO"`(不含引号)。

# 样例

#### 输入样例

```plain
2
4
1 2 1 2
3
1 0 1
```
#### 输出样例

```plain
YES
NO
```
#### 样例解释

对于第一个测试数据可以分别给第一第二座摩天大厦放一个橡皮泥（高度各增加 $1$），再给第二第三座摩天大厦放一个橡皮泥（高度各增加 $1$），最后给第四座摩天大厦单独放一块橡皮泥（高度增加 $2$）。

# 数据范围与提示


