#include<iostream>
using namespace std;
inline float area(float r)
{
    return 3.14*r*r ;
}
int main()
{
  float r;
  cout<<"Enter radius of circle"<<endl;
  cin>>r;
  cout<<"area is : "<<area(r);
}