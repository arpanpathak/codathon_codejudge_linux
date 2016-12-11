/*There is a robot, initially standing at the origin of the Cartesian coordinate system. The coordinates of the robot are, therefore, (0,0). Then, the robot makes N turns.
On the first turn, the robot goes 1 unit to the right.
On the second turn, the robot goes 2 units up.
On the third turn, the robot goes 3 units to the left.
On the fourth turn, the robot goes 4 units down.
On the fifth turn, the robot goes 5 units to the right.
And so on.
Your task is to determine the position of the robot after performing all the N turns.

Input Format

The first line of the input contains T, the number of test cases.
Each test case contains a single integer - the value of N.*/
#include<stdio.h>

int main()
{
	long int test,t,i;
	scanf("%ld",&test);
	for(t=0;t<test;t++)
	{
		long int x=0,y=0,a,b,z,n;
		scanf("%ld",&n);
		if(n%2==0){
		a=n/2;
		b=n+2;}
		else {
		a=(n+1)/2;
		b=n+1;}
		
		if(a%2!=0)
		x=a;
		else
		x=-a;
		
		z=b/2;
		if(z%2==0)
		y=z;
		else
		y=-(z-1);
		
		
		printf("%ld %ld\n",x,y);
	}
	return 0;
}