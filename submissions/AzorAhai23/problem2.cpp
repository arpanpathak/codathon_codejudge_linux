#include<iostream>
using namespace std;
int x;
int y;
int right(int m,int n){

	x=m+n;
	return x;
  }
int up(int a,int b){
 
 y=a+b;
 return y;
 }
int left(int c,int d){
 x=c-d;
 return x;
 }
 int  down(int e, int f){
  y=e-f;
  return y;
  }
main(){ 
	x=0;
	y=0;
	int u,v,w,z;
	char p='y';
	do{
		
		cin>>u;
		cout<<right(x,u)<<","<<y;
	
		cin>>v;
		cout<<x<<","<<up(y,v);
		
		cin>>w;
		cout<<left(x,w)<<","<<y;
	
		cin>>z;
		cout<<x<<","<<down(y,z);
	
		
		
	}while(p=='y'||p=='Y');

	
 }